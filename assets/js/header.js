const header = {
	fixedHeaderScroll(){
		if (window.pageYOffset > 100) {
			document.getElementById("header__top").classList.add("fixed");
		} else {
			document.getElementById("header__top").classList.remove("fixed");
		}
	},

	scrollLink(ahref,ahrefEvent){
		ahrefEvent.preventDefault();
		let item = ahref.getAttribute('href');
		window.scroll({
			top: document.querySelector(item).offsetTop - 35, 
			behavior: 'smooth'
		});
		if(ahref.dataset.logo == undefined){
			document.querySelector('#header__button').click();
		}
	},

	changeMenuMobile(){
		let itens = document.querySelector(".header-mobile-show");
		let displayValue = itens.style.display == 'none' ? 'block' : 'none';
		itens.style.display = displayValue;

		let button = document.querySelector(".header__button");
		if(displayValue == 'block'){
			button.classList.add("change");
		}else{
			button.classList.remove("change");
		}
	}
}
window.onscroll = function() {header.fixedHeaderScroll();};
