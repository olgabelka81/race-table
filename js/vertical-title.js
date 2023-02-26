const buttons = document.querySelectorAll('.button--vertical');  
const getVerticalTitle = () => {
    for (let i = 0; i < buttons.length; i ++) {
        buttons[i].innerHTML = '<span>' + buttons[i].innerHTML.split('').join('</span><span>') + '</span>';
    }
    
};
getVerticalTitle();

export {getVerticalTitle};
