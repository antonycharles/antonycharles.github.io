class Header{
	fixedHeaderScroll(){
		if (window.pageYOffset > 100) {
			document.getElementById("header-top").classList.add("fixed");
		} else {
			document.getElementById("header-top").classList.remove("fixed");
		}
	}

	scrollLink(ahref,ahrefEvent){
		ahrefEvent.preventDefault();
		let item = ahref.getAttribute('href');
		window.scroll({
			top: document.querySelector(item).offsetTop - 35, 
			behavior: 'smooth'
		});
		document.querySelector('#header-button').click();
	}

	changeMenuMobile(){
		let itens = $$(".header-mobile-show");
		let displayValue = getComputedStyle(itens[0]).display == 'none' ? 'block' : 'none';
		itens.forEach(el => {
			el.style.display = displayValue;
		});

		let button = $(".header-button");
		if(displayValue == 'block'){
			button.classList.add("change");
		}else{
			button.classList.remove("change");
		}
	}
}

class Modal{
    openModal(button){
        document.getElementById(button.dataset.modal).style.display = "block";
    }

    closeModal(close){
        let modalOpen = close.parentElement;
        if(modalOpen.parentElement.classList.contains('modal')){
            modalOpen.parentElement.style.display = "none";
        }
    }

    closeModalOnclickWindow(event){
        if(event.target.classList.contains('modal')){
            event.target.style.display = "none";
        }
    }
}

class Accordion{
    changePanel(button){
		button.classList.toggle("active");
        let panel = button.nextElementSibling;
		if (panel.style.display == "block") {
		  	panel.style.display = "none";
		} else {
			panel.style.display = "block";
		}
    }
}

class BannerAnimado{
	start() { 
		for(var i = 0; i < 400; i++){
			var div = document.createElement("DIV");
			div.classList.add("banner-bl");
			document.getElementById("banner").appendChild(div);
			this.startBl(div);
			BannerAnimado.loopBl(div);
		}
	}

	startBl(div){
		setTimeout(function(){
			BannerAnimado.changeTopLeftBl(div);
		 },Math.floor(Math.random() * 5000));
	}

	static loopBl(div){
		setTimeout(function(){ 
			BannerAnimado.changeTopLeftBl(div);
			BannerAnimado.loopBl(div);
		}, 5000 + Math.floor(Math.random() * 3000));
	}

	static changeTopLeftBl(div){
		div.style.top =  Math.floor(Math.random() * 100) + "%";
		div.style.left = Math.floor(Math.random() * 100) + "%";
	}
}

var accordion = new Accordion();

var header = new Header();
window.onscroll = function() {header.fixedHeaderScroll();};

var modal = new Modal();
window.onclick = function(event){modal.closeModalOnclickWindow(event);}

document.querySelector("body").onload = function() {
	let animacao = new BannerAnimado();
	animacao.start();
};