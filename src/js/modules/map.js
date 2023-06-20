async function map() {
  const res = await fetch("../../../../../../locations.json");
  const data = await res.json();
  console.log(data[0]);

  let map = L.map("mapID", {
    center: [45.9938059682257, 1.746981380568295],
    zoom: 5,
    scrollWheelZoom: false,
    attributionControl: false,
    zoomControl: false,
  });

  L.tileLayer(
    "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}",
    {
      id: "imaneo/cliocwqxc000501o1fenj57fa",
      accessToken:
        "pk.eyJ1IjoiaW1hbmVvIiwiYSI6ImNsaW9ieXU4eDE2dzIzcXBrZW1qcTQzanYifQ.gKI80ipqU4w5RyGNuJYbMA",
    }
  ).addTo(map);

  const mapID = document.querySelector("#mapID");
  const marker = mapID.dataset.marker;
  console.log(mapID.dataset.marker);

  const myIcon = L.icon({
    iconUrl: marker,
    iconSize: [24, 24],
    iconAnchor: [12, 12],
  });

  data.forEach((el) => {
    L.marker([el.latitude, el.longitude], {
      icon: myIcon,
    }).addTo(map);
  });
}

export default map;
