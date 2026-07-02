function showGift(){

    document.getElementById("giftBtn").style.display="none";

    document.getElementById("giftContent").style.display="block";

    let width=0;

    let bar=document.getElementById("progressBar");

    let percent=document.getElementById("percent");

    let loading=setInterval(function(){

        if(width>=100){

            clearInterval(loading);

            document.getElementById("loading").innerHTML="Gift Loaded! 🎁";

            document.getElementById("message").style.display="block";

        }

        else{

            width++;

            bar.style.width=width+"%";

            percent.innerHTML=width+"%";

        }

    },35);

}