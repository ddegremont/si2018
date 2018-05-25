const data = {
  article: {
    dom: document.querySelector('[name="article"]'),
    info: [],
    needed: ['title', 'image', 'alt', 'auteur'],
    currentID: 1,
    fetchNb: 2,
    visible: true,
    template: `
    <div class="Main__block__article" style="background-image: url(img2/%image);" title="%alt">
      <div class="Main__block__article__content">
        <h4 class="Main__block__article__contentTitle">%title</h4>
        <div class="Main__block__article__contentInfo">
          <span class="Main__block__article__contentInfoCountry">%auteur</span>
          <span class="Main__block__article__contentInfoDate">24/04/2018</span>
        </div>
      </div>
    </div>
    `,
    elements: []
  },
  boite: {
    dom: document.querySelector('[name="boite"]'),
    info: [],
    needed: ['image', 'image1', 'image2', 'image3', 'image4', 'image5'],
    currentID: 1,
    fetchNb: 1,
    visible: true,
    template: `
    <div class="Main__block__slider">
      <div class="Main__block__slider__images">
        <img src="img2/%image" alt="" class="Main__block__slider__imagesImg">
        <img src="img2/%image1" alt="" class="Main__block__slider__imagesImg">
        <img src="img2/%image2" alt="" class="Main__block__slider__imagesImg">
        <img src="img2/%image3" alt="" class="Main__block__slider__imagesImg">
        <img src="img2/%image4" alt="" class="Main__block__slider__imagesImg">
        <img src="img2/%image5" alt="" class="Main__block__slider__imagesImg">
      </div>
    
      <span class="Main__block__slider__tag">#gastronomie</span>
      <button class="Main__block__slider__button Main__block__slider__button--plus"></button>
      <button class="Main__block__slider__button Main__block__slider__button--minus"></button>
    </div>
    `,
    elements: [],
    script: function() {
      slider()
    }
  },
  coupon: {
    dom: document.querySelector('[name="bon"]'),
    info: [],
    needed: ['departure', 'arrival', 'date', 'price'],
    currentID: 1,
    fetchNb: 1,
    visible: true,
    template: `
    <div class="Main__block__coupon">
      <div class="Main__block__coupon__remaining">BON PLAN - 7 jours restants</div>
      <div class="Main__block__coupon__dates">%date</div>
      <div class="Main__block__coupon__main">
        <h5 class="Main__block__coupon__mainFrom">%departure</h5>
        <img class="Main__block__coupon__mainX" src="img2/x.svg" alt="to">
        <h5 class="Main__block__coupon__mainTo">%arrival</h5>
      </div>
      <div class="Main__block__coupon__class">Première classe</div>
      <div class="Main__block__coupon__airline">
        <img src="img2/oman-air.png" alt="" class="Main__block__coupon__airlineImg">
      </div>
      <div class="Main__block__coupon__price">
        <span class="Main__block__coupon__priceSubtitle">À partir de</span>
        <span class="Main__block__coupon__priceTitle">%price€</span>
      </div>
    </div>
    `,
    elements: []
  }
}

const mainRoot = document.querySelector('.Main')


function fetchData(item) {
  fetch(`backoffice/fetch.php?category=${item.dom.name}&col=${item.needed.join(',')}&from=${item.currentID}&to=${item.currentID+item.fetchNb-1}`,
  {method: 'GET'})
  .then(response => response.json())
  .then(response => {
    item.info.push(...response)
    create(item)
    item.currentID += item.fetchNb
  })
}

function display(item) {
  for (const element of item.elements) {
    element.classList.toggle('none', !item.visible)
  }
}

function addEL() {
  for (const item in data) {
    const el = data[item];
    el.dom.nextSibling.nextSibling.addEventListener('click', () => {
      el.visible = !el.visible
      display(el)
    })
  }
}
addEL()

function goFetch() {
  for (const item in data) {
    const el = data[item];
    fetchData(el)
  }
  // fetchData(data.coupon)
  // fetchData(data.article)
  // fetchData(data.boite)
}
goFetch()

function create(item) {
  for (let i = item.currentID-1; i < item.info.length; i++) {
    const info = item.info[i];
    const div = document.createElement('div')
    div.className = 'Main__block'
    div.classList.toggle('none', !item.visible)
    let template = item.template
    for (const field in info) {
      template = template.replace(`%${field}`, info[field])
    }
    div.innerHTML = template
    mainRoot.appendChild(div)
    item.elements.push(div)
    item.script && item.script()
  }
}
let timeID
let canFetch = true
window.addEventListener('scroll', event => {
  if (!canFetch) {
    return
  }
  if (mainRoot.getBoundingClientRect().bottom <= window.innerHeight) {
    goFetch()
    canFetch = false
    timeID = window.setTimeout(() => {
      canFetch = true
    }, 500)
  }
})


// const allData = {
//   article: [],
//   boite: []
// }

// // function fetchData(category) {
// //   console.log(category);
  
// //   fetch(`backoffice/fetch.php?category=${category}`,
// //   {method: 'GET'})
// //   .then(response => response.json())
// //   .then(createDiv)
// // }

// function createDiv(data) {
//   for (const content of data) {
//     const div = document.createElement('div')
//     div.classList.add('Main__block')
//     div.textContent = content.title
//     mainRoot.appendChild(div)
//   }
// }
// ['article', 'boite', 'partenaire', 'top', 'twitter']
// // fetchData('article')



// function Category(input, currentID, template, neededData) {
//   this.input = input
//   this.currentID = currentID
//   this.template = template
//   this.neededData = neededData
//   this.start = function() {
//     this.on = this.input.checked
//     this.handleClick()
//   }
//   this.handleClick = function() {
//     this.input.addEventListener('click', () => {
//       console.log('click');
      
//       this.on = !this.on
//       this.fetch()
//     })
//   }
//   this.create = function(template, data) {
//     let rdy
//     for (const content in data) {
      
//       if (template.replace('%'+content, 'hello') !== template) {
//         rdy = template.replace('%'+content, data[content])
//       }
//     }
//     mainRoot.innerHTML += rdy
//   }
//   this.hide = function() {
    
//   }
//   this.fetch = function() {
//     if (!this.on) {
//       this.hide()
//       return
//     }
    
//     fetch(`backoffice/fetch.php?category=${this.input.name}&id1=1&id2=2&id3=3`,
//     {method: 'GET'})
//     .then(response => response.json())
//     .then(data => {
//       allData[this.input.name].push(...data)
//       console.log(allData);
//       for (const item of allData[this.input.name]) {
        
//         // this.create(this.template, item)
//       }
//     })
//   }
// }

// article = new Category(
//   document.querySelector('[name="article"]'),
//   0,
//   `<div class="Main__block" style="background-color: red">
//   %title
//   </div>`,
//   ['title']
// )

// article.start()


// boite = new Category(
//   document.querySelector('[name="boite"]'),
//   0,
//   `<div class="Main__block" style="background-color: blue">
//   %title
//   </div>`,
//   ['title']
// )
// boite.start()


// function createAll() {
  
// }