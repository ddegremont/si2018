import style from '../style/main.sass';
import reset from '../style/reset.sass';

const styleEl = document.createElement('style');
styleEl.innerHTML = style +''+ reset;
document.head.appendChild(styleEl);
