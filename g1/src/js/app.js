import style from '../style/main.sass';

const styleEl = document.createElement('style');
styleEl.innerHTML = style;
document.head.appendChild(styleEl);