window.onload = function(){ 

	var openMenu = document.querySelector('.open-menu');
	var closeMenu = document.querySelector('.close-menu');
	var documentElement = document.documentElement;
	var lis = document.querySelector('.main-menu').getElementsByTagName('li');

	addClass = function(element,className){
		element.classList.add(className);
	};

	removeClass = function(element,className){
		element.classList.remove(className);
	};

	//ENABLE AND DISABLE THE RESPONSIVE MENU
    openMenu.onclick = function(){
    	addClass(document.documentElement, 'active');
	}
	closeMenu.onclick = function(){
		document.documentElement.classList.remove('active');
	}
	documentElement.onclick = function(event){
		if(event.target === documentElement){
			documentElement.classList.remove('active');
		}	
	}

	// ADD AN ICON TO A SUBMENU LINK
	for(var i =0; i< lis.length; i++){
		if(lis[i].classList.contains('menu-item-has-children')){
			var listLis = lis[i];
			as = listLis.firstElementChild;
			addClass(as, 'drop');
		}
	}

};