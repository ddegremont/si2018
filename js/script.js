const data = {
  article: {
    dom: document.querySelector('[name="article"]'),
    info: [],
    needed: ['title', 'texte'],
    currentID: 1,
    fetchNb: 3,
    visible: true,
    template: `
    <div class="Main__block">
      <h1 style="background-color: blue">
        %title
      </h1>
      %texte
    </div>
    `,
    elements: []
  },
  boite: {
    dom: document.querySelector('[name="boite"]'),
    info: [],
    needed: ['name', 'image'],
    currentID: 1,
    fetchNb: 1,
    visible: true,
    template: `
    <div class="Main__block">
      <h1 style="background-color: red">
        %name
      </h1>
      %image
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
  }
}

window.addEventListener('scroll', event => {
  if (mainRoot.getBoundingClientRect().bottom <= window.innerHeight) {
    goFetch()
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