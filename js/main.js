const cookieBanner = document.querySelector(".cookieBanner");
const cookieButton = document.querySelector(".cookiebtn");

cookieButton.addEventListener("click", () => {

   cookieBanner.classList.remove("active");
   localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
    if(!localStorage.getItem("cookieBannerDisplayed"))
    {
	cookieBanner.classList.add("active");
}

}, 6000);

//Cookies are important to the proper
 //functioning of a site. To improve your experience,
  //we use cookies to remember log-in details and provide secure log-in,
  // collect statistics to optimize site functionality, and deliver content tailored to your interests. Click Agree and Proceed to accept cookies and go directly to the site or click on View Cookie Settings to see detailed descriptions of the types of cookies and choose whether to accept certain cookies while on the site.