/**
 * Custom JS for theme elements
 */

/**
 * Wocommerce active class for category list
 */
let fotografieBlocksUrl = window.location.href;
const fotografieBlocksCatLink = document.querySelectorAll(
  ".wc-block-product-categories-list li a"
);
fotografieBlocksCatLink.forEach((item) => {
  if (item.href === fotografieBlocksUrl) {
    item.classList.add("active");
  }
});


/**
 * Header Search Show/Hide js
 */

let searchContainer = document.querySelectorAll('.wp-primary-search');
searchContainer.forEach((searchForm) => {
  let body = document.body;
  if (searchForm !== null) {
    let toggleIcon = searchForm.querySelector('.wp-search-toggle-container')
    let searchInnerContainer = searchForm.querySelector('.wp-search-container')
    let searchInput = searchForm.querySelector('.wp-block-search__input')
    let fseSearch = document.querySelectorAll('.search-controller .svg, .social-controller .svg')
    let body = document.body;

    fseSearch.forEach((searchButton) => {
      searchButton.addEventListener('click', function () {
        console.log('clicked')
        body.classList.remove('show-search')
        searchForm.classList.remove('toggled-on')
      })
    })

    toggleIcon.addEventListener('click', function () {
      searchForm.classList.toggle('toggled-on')
      body.classList.toggle('show-search')
      searchInput.focus()
    })

    document.addEventListener('click', function (e) {
      if (!searchInput.contains(e.target) && !searchInnerContainer.contains(e.target) && !toggleIcon.contains(e.target) && searchForm.classList.contains('toggled-on')) {
        searchForm.classList.remove('toggled-on')
        body.classList.remove('show-search')
      }
    })
  }
})

// Function to Add/remove class for mobile Woocommerce sidebar Widgets/filters
const toggleFunc = (targetElem) => {
  let filterButtons = document.querySelectorAll(targetElem);

  filterButtons.forEach((filterButton) => {
    if (filterButton !== null) {
      filterButton.addEventListener("click", () => {
        if (filterButton.classList.contains("toggled-on")) {
          // if has 'toggled-on' class remove class
          filterButton.classList.remove("toggled-on");
        } else {
          // otherwise add 'toggled-on' class
          filterButton.classList.add("toggled-on");
        }
      });
    }
  });
};

toggleFunc(".btn-mobile-filters");

// Plus minus function added on product input counter
function wooQtyChange() {
  let qtyWrap = document.querySelectorAll('.quantity');
  qtyWrap.forEach((wrap) => {
    let qNav = document.createElement('div');
    let qUp = document.createElement('div');
    let qDown = document.createElement('div');
    let input = wrap.querySelectorAll('.qty');
    qUp.innerHTML = '+';
    qDown.innerHTML = '-';
    qNav.appendChild(qUp);
    qNav.appendChild(qDown);
    wrap.appendChild(qNav)
    qUp.setAttribute('class', 'quantity-button quantity-up');
    qDown.setAttribute('class', 'quantity-button quantity-down');
    max = 99999;
    let min = '';
    input.forEach((inputItem) => {
      min = inputItem.getAttribute('min');
      if (qtyWrap.length > 1) {
        // Set default value to 0
        inputItem.value = 0;
      }
      qNav.setAttribute('class', 'quantity-nav');
      let btnUp = wrap.querySelectorAll('.quantity-up');
      btnUp.forEach((btnItem) => {
        btnItem.addEventListener('click', function () {
          let oldValue = parseFloat(inputItem.value);
          if (oldValue >= max) {
            var newVal = oldValue;
          } else {
            var newVal = oldValue + 1;
          }
          inputItem.value = newVal
          var element = document.createEvent('HTMLEvents');
          var event = new Event('change', {
            bubbles: true
          });
          inputItem.dispatchEvent(event);
          return event;
        })
      })
      let btnDown = wrap.querySelectorAll('.quantity-down');
      btnDown.forEach((btnItem) => {
        btnItem.addEventListener('click', function () {
          let oldValue = parseFloat(inputItem.value);
          if (oldValue >= max) {
            var newVal = oldValue;
          } else if (oldValue <= 0) {
            var newVal = 0;
          } else {
            var newVal = oldValue - 1;
          }
          inputItem.value = newVal
          var element = document.createEvent('HTMLEvents');
          var event = new Event('change', {
            bubbles: true
          });
          inputItem.dispatchEvent(event);
          return event;
        })
      })
    })
  })
}
wooQtyChange();

function wooCartUpdate() {
  let btnTrigger = document.querySelector('button[name="update_cart"]');
  if (btnTrigger !== null) {
    btnTrigger.addEventListener('click', function () {
      setTimeout(function () {
        wooQtyChange();
      }, 5000);
      setTimeout(function () {
        wooCartUpdate();
      }, 5000);
    });
  }
}
wooCartUpdate();
