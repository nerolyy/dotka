const profileImageInput = document.querySelector('#profile-image-input');
const profileImg = document.querySelector('.profile-img');

function loadProfileImage() {
    const savedImage = localStorage.getItem('profileImage');
    if (savedImage) {
        profileImg.src = savedImage;
    }
}

function handleProfileImageChange() {
    const file = profileImageInput.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            profileImg.src = e.target.result;
            localStorage.setItem('profileImage', e.target.result);
        };
        reader.readAsDataURL(file);
    }
}
profileImg.addEventListener('click', () => profileImageInput.click());
profileImageInput.addEventListener('change', handleProfileImageChange)

loadProfileImage();

