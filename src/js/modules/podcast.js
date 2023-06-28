const params = {
  client_id: "ecaf665a18ec4a92979a7ae31f4ccbb6",
  client_secret: "9d744aa03a024388b02429b100e61bd5",
};

const options = {
  method: "POST",
  body: `grant_type=client_credentials&client_id=${params.client_id}&client_secret=${params.client_secret}`,
  headers: {
    "Content-Type": "application/x-www-form-urlencoded",
  },
  mode: "cors",
  cache: "default",
};

async function podcast() {
  const res = await fetch("https://accounts.spotify.com/api/token", options);
  const data = await res.json();
  console.log(data);
}

export default podcast;
