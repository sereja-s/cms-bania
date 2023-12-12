// .tab {
//     display: none;
//     &.is-active {
//         display: block;
//     }
// }


let tab = function () {
	let tabNav = document.querySelectorAll('.tabs-nav__item');
	let tabContent = document.querySelectorAll('.tab');
	let tabName;

	tabNav.forEach(item => {
		item.addEventListener('click', selectTabNav)
	});

	function selectTabNav() {
		tabNav.forEach(item => {
			item.classList.remove('is-active');
		});
		this.classList.add('is-active');
		tabName = this.getAttribute('data-tab-name');
		selectTabContent(tabName);

	}

	function selectTabContent(tabName) {
		tabContent.forEach(item => {
			item.classList.contains(tabName) ? item.classList.add('is-active') : item.classList.remove('is-active');
		})
	}
};


tab();