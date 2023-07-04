import gsap from 'gsap';

async function map() {

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

  const mapTab = document.querySelector('.tab[href="#map"]');

  mapTab.addEventListener('click', () => {
    setTimeout(() => {
      L.remove(map);

    }, 500);
  })

  /////////////////////////////////////////////////////////////////////////

  const res = await fetch('http://imaneo.local/wp-json/wp/v2/project?per_page=20');
  const data = await res.json();
  
  const mapID = document.querySelector("#mapID");
  const markerBK = mapID.dataset.marker;
  const markerHL = mapID.dataset.highlight;
  const postID = mapID.dataset.id;
  
  const main = data.filter( (el) => {
    return el.id === Number(postID);
  })
  const secondaries = data.filter( (el) => {
    return el.id !== Number(postID);
  })

  const mainIcon = L.icon({
    iconUrl: markerHL,
    iconSize: [24, 24],
    iconAnchor: [12, 12],
  });
  const secIcon = L.icon({
    iconUrl: markerBK,
    iconSize: [24, 24],
    iconAnchor: [12, 12],
  });

  main.forEach((el) => {
    L.marker([el.acf.projects.project_info.map.longitude, el.acf.projects.project_info.map.latitude], {
      icon: mainIcon,
      alt: "mainMarker",
    }).addTo(map);
  });

  secondaries.forEach((el) => {
    L.marker([el.acf.projects.project_info.map.longitude, el.acf.projects.project_info.map.latitude], {
      icon: secIcon,
    }).addTo(map);
  });

  const greenMarker = document.querySelector('.leaflet-marker-pane img[alt="mainMarker"]');

  gsap
    .timeline({
      repeat: -1
    })
    .to(greenMarker, {scale: 1,ease: "power2.out", duration: 0.6})
    .to(greenMarker, {scale: 1.3,ease: "power2.out", duration: 0.6})
    .to(greenMarker, {scale: 1,ease: "power2.out", duration: 0.6});

}

export default map;