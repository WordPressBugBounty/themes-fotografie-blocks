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
