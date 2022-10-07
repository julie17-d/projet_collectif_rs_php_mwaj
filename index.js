const apiKey = "c65527ff";

let search;

let searchbar = document.getElementById("searchbar");

async function fetchMovies(searchField) {
  let url = "http://www.omdbapi.com/?apikey=" + apiKey + "&s=" + searchField;
  const response = await fetch(url);
  const data = await response.json();
  // console.log(data);
  return data;
}

function getButton() {
  let searchField = document.getElementById("searchField");
  let button = document.getElementById("search");
  button.addEventListener("click", (event) => {
    printMovie(searchField.value).then((movies) => {
      console.log(movies);
      $.post(
        "researchPage.php",
        {
          movies: movies,
        },
        function (data, status) {
          console.log("Status: " + status);
          // console.log(data)
          redirection(data);
        }
      );
    });
  });
}

async function printMovie(searchField) {
  const data = await fetchMovies(searchField);
  let title;
  let year;
  let imdbId;
  let poster;
  let type;

  let movies = [];

  // console.log("data", data);

  for (i = 0; i < data.Search.length; i++) {
    title = data.Search[i].Title;
    year = data.Search[i].Year;
    imdbId = data.Search[i].imdbID;
    poster = data.Search[i].Poster;
    type = data.Search[i].Type;

    movies.push({ title, year, imdbId, poster, type });
  }

  return movies;
}

function redirection(test) {
  document.querySelector("html").innerHTML = test;
}

getButton();
