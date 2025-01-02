document.addEventListener("DOMContentLoaded", function () {
  const body = document.body;

  const eventNumber = body.getAttribute("data-event");
  const beerImage = document.querySelector("#beer");
  console.log(beerImage);

  if (eventNumber == 4 && document.getElementById("beer")) {
    const celebrationSound = document.getElementById("celebrationSound");
    celebrationSound.volume = 0.3;
    celebrationSound.play();
    beerImage.classList.add("rotate-animation");
  }
});
