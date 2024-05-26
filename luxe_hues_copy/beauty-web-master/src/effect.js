import { importedEffectsList } from "../import/effectsList.js";
import {
  getSelectedTechnology,
  getSelectedCategory,
  getSelectedEffect,
  setSelectedEffect,
  setControlBlock,
  setControlFunc,
  setCurEventType,
  getControlBlock,
  getControlFunc,
} from "./state.js";
import {
  applyEffect,
  applyEffectParam,
} from "../BanubaPlayer.js";

import {
  heartRateBlock,
  testRulerBlock,
  handGesturesTipBlock,
  effectControlBlock,
  handGesturesBlock,
} from "./elements.js";

export const getImportedEffects = (effectsList) => {
  importedEffectsList.forEach((effect) =>
    effectsList.import.effects.push({ name: effect }),
  );
};

export const setEffectParam = async (params, value, arg) => {
  for (const param of params) {
    const s = arg ? `${param}({${arg}:${value}})` : `${param}(${value})`;
    await applyEffectParam(s);
  }
};

export const addEffectControlHandler = (control) => {
  setCurEventType(control);

  switch (control) {
    case "slider":
      const min =
        getSelectedEffect().minValue !== undefined
          ? getSelectedEffect().minValue
          : -10;

      effectControlBlock.innerHTML = `
        <div class="effect-control__slider-container">
          <input type="range" min="${min}" max="10" value="0" class="effect-control__slider">
        </div>`;

      setControlBlock(document.querySelector(".effect-control__slider"));

      const value = ((0 - min) / (10 - min)) * 100;

      getControlBlock().style.background =
        "linear-gradient(to right, #4794FE 0%, #4794FE " +
        value +
        "%, #EEF2F7 " +
        value +
        "%, #EEF2F7 100%)";

      setControlFunc(async (e) => {
        const value =
          ((e.target.value - e.target.min) / (e.target.max - e.target.min)) *
          100;
        document.querySelector(".effect-control__slider").style.background =
          "linear-gradient(to right, #4794FE 0%, #4794FE " +
          value +
          "%, #EEF2F7 " +
          value +
          "%, #EEF2F7 100%)";
        await setEffectParam(
          getSelectedEffect().params,
          (e.target.value * getSelectedEffect().direction) / 10,
          getSelectedEffect()?.arg,
        );
      });

      getControlBlock().addEventListener("input", getControlFunc());
      break;

    case "toggle":
      effectControlBlock.innerHTML =
        '<input type="checkbox" name="toggle" class="effect-control__toggle" checked>';

      setControlBlock(document.querySelector(".effect-control__toggle"));

      setControlFunc(async (e) => {
        await setEffectParam(
          getSelectedEffect().params,
          e.target.checked ? 1 : 0,
        );
      });

      getControlBlock().addEventListener("change", getControlFunc());
      break;

    

    default:
      setControlBlock(null);
      setControlFunc(null);
      setCurEventType(null);
  }
};

export const startEffect = (effectIndex) => {
  setSelectedEffect(getSelectedCategory().effects[effectIndex]);
  const effectPath =
    getSelectedTechnology().label === "Imported"
      ? "import/"
      : "assets/effects/";
  applyEffect(effectPath + getSelectedEffect().name).then(() =>
    addEffectControlHandler(getSelectedEffect()?.control),
  );
};
