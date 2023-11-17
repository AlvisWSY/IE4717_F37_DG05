const container = document.querySelector(".seat_container");
const seats = document.querySelectorAll(".row .seat:not(.sold)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const count_input = document.getElementById("count_input");
const total_input = document.getElementById("total_input");
const selected_list = document.getElementById("selected_list");
populateUI();

let ticketPrice = 100;

// Save selected movie index and price
// function setMovieData(movieIndex, moviePrice) {
//   localStorage.setItem("selectedMovieIndex", movieIndex);
//   localStorage.setItem("selectedMoviePrice", moviePrice);
// }

// Update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;
  const selectedSeatArray = [];
  for (var i=1;i<selectedSeatsCount;i++)
{ 
    selectedSeatArray.push(selectedSeats[i].id);
}
  count.innerText = selectedSeatsCount-1;
  total.innerText = (selectedSeatsCount-1) * ticketPrice;
  selected_list.value = selectedSeatArray;
  count_input.value =selectedSeatsCount-1;
  total_input.value = (selectedSeatsCount-1) * ticketPrice;


  // setMovieData(movieSelect.selectedIndex, movieSelect.value);
}


// Get data from localstorage and populate UI
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        console.log(seat.classList.add("selected"));
      }
    });
  }

  // const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

  // if (selectedMovieIndex !== null) {
  //   movieSelect.selectedIndex = selectedMovieIndex;
  //   console.log(selectedMovieIndex)
  // }
}
console.log(populateUI())
// Movie select event
// movieSelect.addEventListener("change", (e) => {
//   ticketPrice = +e.target.value;
//   setMovieData(e.target.selectedIndex, e.target.value);
//   updateSelectedCount();
// });

// Seat click event
container.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("seat") &&
    !e.target.classList.contains("sold")
  ) {
    e.target.classList.toggle("selected");

    updateSelectedCount();
  }
});

// Initial count and total set
updateSelectedCount();
