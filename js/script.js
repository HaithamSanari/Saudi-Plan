// menu toggle button
let navbar = document.querySelector('.header .navbar')

document.querySelector('#menu-btn').onclick = () => {
  navbar.classList.toggle('active')
  console.log(1)
}

window.onscroll = () => {
  navbar.classList.remove('active')
}

// video button toggle
document
  .querySelectorAll('.about .video-container .controls .control-btn')
  .forEach((btn) => {
    btn.onclick = () => {
      let src = btn.getAttribute('data-src')
      document.querySelector('.about .video-container .video').src = src
    }
  })

// Scroll to top 
let btnScroll = document.querySelector('.scroll-top')
window.onscroll = () => {
  if (window.scrollY >= 1000) {
    btnScroll.style.display = 'block'
  } else {
    btnScroll.style.display = 'none'
  }
}
btnScroll.addEventListener('click', () => {
  window.scrollTo({
    left: 0,
    top: 0,
    behavior: 'smooth',
  })
})

// const langEl = document.querySelector('.langWrap');
//   const link = document.querySelectorAll('a');
//   const titleEl = document.querySelector('.title');
//   const descrEl = document.querySelector('.description');

//   link.forEach(el => {
//     el.addEventListener('click', () => {
//       langEl.querySelector('.active').classList.remove('active');
//       el.classList.add('active');

//       // const attr = el.getAttribute('language');

//       // titleEl.textContent = data[attr].title;
//       // descrEl.textContent = data[attr].description;
//     });
//   });

//   var data = {
//     "english": {
//       "title": " choose us?",
//       "description": " will help you find the best travel and holiday deals in Saudi Arabia, by providing multiple and different options in the best locations to choose from. Save your savings by booking the best and cheapest travel deals."
//     },
//     "arabic": {
//       "title": "لماذا تختارنا",
//       "description": "سنساعدك في العثور على أفضل صفقات السفر والعطلات في المملكة العربية السعودية، من خلال توفير خيارات متعددة ومختلفة في أفضل المواقع للاختيار من بينها. وفر مدخراتك عن طريق حجز أفضل وأرخص صفقات السفر."
//     },
//   }

// var a = document.querySelectorAll('a ')
// for (var i = 0, length = a.length; i < length; i++) {
//   el.addEventListener('click', () => {
//     langEl.querySelector('.active').classList.remove('active')
//     el.classList.add('active')
//   })
// }

// let b = document.querySelector('.langWrap a');

// b.forEach(btn =>{
//   b.addEventListener('click', function() =>{
//     b.forEach(c => c.classList.remove('active')).this.classList.add('active')
//   });
// });
