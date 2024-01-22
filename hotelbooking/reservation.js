document.addEventListener("DOMContentLoaded", function () {
    // Fetch room numbers from the server
    fetchRoomNumbers();

    // Add an event listener to the Reserve Room button
    document.querySelector("#reservationForm button").addEventListener("click", reserveRoom);
});

function fetchRoomNumbers() {
    // Make an AJAX request to fetch room numbers
    fetch("fetch_room_numbers.php")
        .then(response => response.json())
        .then(data => {
            // Populate the room numbers in the dropdown
            const roomNumberSelect = document.getElementById("roomNumber");

            // Clear existing options
            roomNumberSelect.innerHTML = '';

            data.forEach(roomNumber => {
                const option = document.createElement("option");
                option.value = roomNumber;
                option.textContent = `Room ${roomNumber}`;
                roomNumberSelect.appendChild(option);
            });
        })
        .catch(error => {
            console.error("Error fetching room numbers:", error);
        });
}

function reserveRoom() {
    // Implement your reservation logic here
    // You can use the selected room number, check-in date, and check-out date
    // and send them to the server for processing
}
