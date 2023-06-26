import { Player } from "shikwasa";

const podcast = () => {
  const player = new Player({
    container: () => document.querySelector(".podcast"),
    audio: {
      title: "Hello World!",
      artist: "Shikwasa FM",
      cover: "image.png",
      src: "https://open.spotify.com/track/5hFkGfx038V0LhqI0Uff2J?si=b7256a3e481d4a4a",
    },
  });
};

export default podcast;
