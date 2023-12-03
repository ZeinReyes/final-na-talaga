const slider = document.querySelector(".circular-slider");
const image = document.querySelector(".slider .img");
const indicator = document.querySelector(".indicator");
let menuItems = document.querySelectorAll(".menu span"); // Correct selector
let description = document.querySelectorAll(".text");

let rotationValues = [-65, 0, 65];

const images = ["best1", "best2", "best3"];

let itemIndex = 1;



function rotate(rotationValue) {
    image.style.transform = `rotate(${rotationValue}deg)`;
    indicator.style.transform = `translate(-50%, -50%) rotate(${rotationValue}deg)`;
}

menuItems.forEach((menuItem, i) => {
    menuItem.addEventListener("click", () => {
        const imagePath = "images/" + images[i] + ".png";
        console.log("Image path:", imagePath);

        // Set background image directly on the .img element
        image.style.backgroundImage = `url(${imagePath})`;


        if (i > itemIndex) {
            rotate(rotationValues[itemIndex] - 10);
        } else if (i < itemIndex) {
            rotate(rotationValues[itemIndex] + 10);
        } else {
            return "";
        }

        setTimeout(() => {
            rotate(rotationValues[i]);
        }, 300);

        description.forEach(text => {
            text.style.display = "none";
        });

        description[i].style.display = "block";
        itemIndex = i;
    });
});
