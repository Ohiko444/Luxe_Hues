import { fps, getSource, startPlayer } from "../BanubaPlayer.js";

import {
  webcamSourceButton,
  imageSourceButton,
  startScreen,
  overlay,
  fpsBlock,
} from "./elements.js";

const onSourceSelect = () => {
  startScreen.classList.add("hidden");
  overlay.classList.add("hidden");
  
};



const onImageSelect = (e) => {
  const source = getSource(e.target.value, e.target.files[0]);
  startPlayer(source);
  onSourceSelect();
};


imageSourceButton.addEventListener("change", onImageSelect);
