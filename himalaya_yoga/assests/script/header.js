let dropDown1= document.getElementById("sn-dropdown0");
let dropDown2= document.getElementById("sn-dropdown1");
let dropDown3= document.getElementById("sn-dropdown2");
let closeSideNav = document.getElementById("close-side-navbar-icon");
let sideNav = document.getElementById("sidebar");
let hamBuger = document.getElementById("hamburger");

dropDown1.style.display = "none";

hamBuger.addEventListener("click", openSidebar);

function openSidebar(){
    if(sideNav.style.display === "none")
    {
        sideNav.style.display = "block";
    }
    else{
        sideNav.style.display = "none";
    }
}

closeSideNav.addEventListener("click",closeNav);

function closeNav(){
    if(sideNav.style.display=== "block")
    {
        sideNav.style.display = "none";
    }

}

//drop down - side nav bar 1 - instructor
document.getElementById("dropdown-button").addEventListener("click", function() {
    var dropdown = document.getElementById("sn-dropdown0");
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
});

//drop down - side nav bar - programs/campaigns
document.getElementById("dp-db-2").addEventListener("click", function() {
    var dropdown = document.getElementById("sn-dropdown1");
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
});


//
document.getElementById("dp-db-3").addEventListener("click", function() {
    var dropdown = document.getElementById("sn-dropdown2");
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
});




document.addEventListener("DOMContentLoaded", function () {
    // Get the main video element
    let mainVideo = document.getElementById("first-video-link");

    // Get all small videos in the bottom row
    let smallVideos = document.querySelectorAll(".video-fluid");

    // Loop through each small video and add a click event
    smallVideos.forEach((video) => {
        video.addEventListener("click", function () {
            // Change the main video src to the clicked video src
            mainVideo.src = this.src;
            mainVideo.play(); // Play the new video
        });
    });
});


// function for load more images

function loadMore() {
    const block1 = document.getElementById("block-c-1");
    const block2 = document.getElementById("block-c-2");
    const btn = document.getElementById("loadMoreBtn");

    block1.style.display = "block";
    block2.style.display = "block";

    // Hide the button after loading content
    btn.style.display = "none";
}

document.getElementById("event-down-arrow-dd").addEventListener("click", () => {
    const ddEvents = document.getElementById("sn-dropdown-events");

    if (ddEvents.style.display === "none" || ddEvents.style.display === "") {
        ddEvents.style.display = "block";
    } else {
        ddEvents.style.display = "none";
    }
});