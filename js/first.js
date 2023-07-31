/*ローディングからの画面遷移*/
const loadingAreaGrey=document.querySelector('#loading');
const loadingText=document.querySelector('#loading img');

window.addEventListener('load',()=>{
    loadingAreaGrey.animate(
        {
            opacity:[1,0],
            visibility:'hidden',
        },
        {
            duration:2000,
            delay:1200,
            easing:'ease',
            fill:'forwards',
        }
    );

    loadingText.animate(
        [
        {
        opacity:1,
        offset:.8,  
        },
        {
        opacity:0,
        offset:1,
        },
        ],
        {
            duration:1200,
            easing:"ease",
            fill:"forwards",
        }

    );
});

