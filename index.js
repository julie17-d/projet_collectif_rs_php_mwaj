const apiKey = "c65527ff";

let search;

async function fetchMovies() {
  let url = "http://www.omdbapi.com/?apikey=" + apiKey + "&s=" + "get out";
  const response = await fetch(url);
  const data = await response.json();
  return data;
}

fetchMovies();
