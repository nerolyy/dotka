from flask import Flask, jsonify
from sqlalchemy import create_engine, Column, Integer, String, DateTime
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import sessionmaker
from datetime import datetime
import requests
from bs4 import BeautifulSoup
from flask_cors import CORS 

app = Flask(__name__)
CORS(app) 

DATABASE_URL = "sqlite:///liquipedia_data.db"
engine = create_engine(DATABASE_URL, echo=False)
Base = declarative_base()

class Match(Base):
    __tablename__ = "matches"

    id = Column(Integer, primary_key=True)
    team1 = Column(String)
    team2 = Column(String)
    tournament = Column(String)
    date_time = Column(DateTime)
    url = Column(String)

    def __repr__(self):
        return f"<Match(team1='{self.team1}', team2='{self.team2}', tournament='{self.tournament}', date='{self.date_time}')>"

Base.metadata.create_all(engine)
Session = sessionmaker(bind=engine)
session = Session()


def scrape_liquipedia_dota2():
    url = "https://liquipedia.net/dota2/Main_Page"
    try:
        response = requests.get(url)
        response.raise_for_status()
        soup = BeautifulSoup(response.content, "html.parser")
        # **АДАПТИРУЙТЕ ЭТОТ КОД ДЛЯ ПАРСИНГА LIQUIPEDIA!**
        upcoming_matches = soup.find_all("div", class_="divRow")
        # ... (логика парсинга)
        return [] # Возвращаем список словарей с данными о матчах
    except Exception as e:
        print(f"Error scraping: {e}")
        return []

# API-эндпоинт для получения матчей
@app.route('/api/matches')
def get_matches():
    matches = scrape_liquipedia_dota2() # Получаем данные с Liquipedia (или из базы данных)
    return jsonify(matches) # Возвращаем JSON

if __name__ == '__main__':
    app.run(debug=True)
