const navIcon = document.querySelector('.bar-icon')
const closeBtn = document.querySelector('.nav__mobile-btn-close')
const navMobile = document.querySelector('.nav__mobile')
const navItem = document.querySelectorAll('.nav-link')

navIcon.onclick = () => {
    navMobile.classList.add('active')
}

for (var i = 0; i < navItem.length; ++i) {
    navItem[i].onclick = () => {
        navMobile.classList.remove('active')
    }
}

closeBtn.onclick = () => {
    navMobile.classList.remove('active')
}

const btnCheck = document.querySelector('.checked-contract')
const dayItem = document.querySelector('.day')
const monthItem = document.querySelector('.month')
const yearItem = document.querySelector('.year')

var date = new Date();
day = date.getDate();
month = date.getMonth() +1;
year = date.getFullYear();

handleCheckedContract = () => {
    if(btnCheck.checked === true ) {
        dayItem.value = day
        monthItem = month
        yearItem = year
    } else {
        dayItem.value = monthItem.value = yearItem.value = ''
    }
}