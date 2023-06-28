const params = {
  client_id: "ecaf665a18ec4a92979a7ae31f4ccbb6",
  client_secret: "9d744aa03a024388b02429b100e61bd5",
};

const optionsPost = {
  method: "POST",
  body: `grant_type=client_credentials&client_id=${params.client_id}&client_secret=${params.client_secret}`,
  headers: {
    "Content-Type": "application/x-www-form-urlencoded",
  },
  mode: "cors",
  cache: "default",
};

// const optionsGet = {
//   method: "GET",
//   headers: {
//     "Content-Type": "application/x-www-form-urlencoded",
//   },
//   mode: "cors",
//   cache: "default",
// };

function podcast() {
  // const res = await fetch("https://accounts.spotify.com/api/token", optionsPost);
  // const data = await res.json();

  window.onSpotifyWebPlaybackSDKReady = () => {
    const token =
      "BQAAUy0SCRa3WshbVYnPGFoZKxsX_oqh3ZOjkCA_QJUc981J9LISNlmqmmm7M9223iKAzMyLR7ICLrD1dbYhcgYuTVwcQuQ-FRYvUaijFB1xCZqfO_BTcqnOoNkFXnxs8MoW5RFy3OGBtp5HcdlZxy0vavFbCyO4Hyl8vTyEo6Wg0sG-Lt0toDgWR1TJcORFeCCICg";
    const player = new Spotify.Player({
      name: "Imaneo Player",
      getOAuthToken: (cb) => {
        cb(token);
      },
      volume: 0.5,
    });

    console.log("funca")
    
    // Ready
    player.addListener("ready", ({ device_id }) => {
      console.log("Ready with Device ID", device_id);
    });

    // Not Ready
    player.addListener("not_ready", ({ device_id }) => {
      console.log("Device ID has gone offline", device_id);
    });
  };
}

export default podcast;
