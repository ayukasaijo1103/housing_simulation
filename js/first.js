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

const caption=(entries)=>{
    const keyframes={
    opacity:[0,1],
    translate:['0 50px',0],
};
const options={
    duration:7000,
    easing:'ease',
    fill:'forwards',
};
entries[0].target.animate(keyframes,options);
};

//監視ロボットの設定
const captionobserver=new IntersectionObserver(caption);
//#captionを監視するように指示
captionobserver.observe(document.querySelector('#caption'));