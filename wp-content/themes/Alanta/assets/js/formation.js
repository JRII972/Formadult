
let TAG = '{ "@logo" : "./asset/images/logo.svg", "@mention" : "", "@planweb" : "", "@cookies" : "", "@youtube" : "", "@facebook" : "", "@tweeter" : "", "@linkedin" : "", "@formation" : "", "@faq" : "", "@contact" : "", "@avis" : "", "@actualité" : "", "@slogan" : "FormAdult on forme des adultes", "@acceuil" : "", "@apropos" : "" , "@formation": "", "@espaceClient": ""}' ;

window.addEventListener('resize', resizeIframe);
document.addEventListener("DOMContentLoaded", environmentTagHandler);

function environmentTagHandler(){
    const TAGjson = JSON.parse(TAG);
    var doc = document.body.innerHTML
    //Replace all Tag
    Object.entries(TAGjson).forEach(([key, value]) => { 
        doc = doc.replace(key, value); 
        console.log(key + ' replaced');
    });
    
    document.body.innerHTML = doc
}

function resizeIframe() {
    var obj = document.getElementById('iframe');
    obj.style.height = (window.innerWidth / (1520 / 3492)) - 160;
    console.log(obj.style.height);

}



function show_nav() {
    var btn = document.getElementById('mobile-menu-btn');

    if (btn.classList.contains('menu--open')) {
        document.body.classList.remove('ovh');
        btn.classList.remove('menu--open')
        document.getElementById('main').classList.remove('menu--open');
        document.getElementById('primary-nav').classList.remove('is--visible');
    }else{
        document.body.classList.add('ovh');
        btn.classList.add('menu--open')
        document.getElementById('main').classList.add('menu--open');
        document.getElementById('primary-nav').classList.add('is--visible');
    }
}
    
function tab_nav(obj){
    console.log('nav tab')
    console.log(obj.dataset.href)
    var nav = document.getElementById(obj.dataset.href);
    console.log(nav.classList.item(0));
    unset_visible(nav.classList.item(0), 'is-active');
    nav.classList.add('is-active');

    unset_visible(obj.classList.item(0), 'is-active');
    obj.classList.add('is-active');
    
}

function unset_visible(ClassName, value = 'is--visible'){
    Array.from(document.getElementsByClassName(ClassName)).forEach(
        function(element, index, array) {
            element.classList.remove(value);
        }
    );
}

function change_display_inline_style(ClassName, Value){
    Array.from(document.getElementsByClassName(ClassName)).forEach(
        function(element, index, array) {
            element.style.display = value;
        }
    );
}

function product_section_trigger(obj){
    if (obj.classList.contains('is-active')){
        obj.classList.remove('is-active');
        document.getElementById(obj.dataset.href).style.display = 'none';
    }else{
        obj.classList.add('is-active');
        document.getElementById(obj.dataset.href).style.display = 'block';
    }
    
}

function mobile_show_nav_menu(obj){
    obj.closest("li").lastElementChild.classList.remove('is--hidden');
    obj.closest("ul").classList.add('moves-out');
}

function mobile_hidde_nav_menu(obj){
    console.log(obj);
    obj = obj.closest("li").firstElementChild;
    console.log(obj.closest("li").lastElementChild);
    obj.closest("li").lastElementChild.classList.add('is--hidden');
    
    obj.closest("ul").classList.remove('moves-out');
}