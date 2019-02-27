<template>
  <div class="content">
    <span class="bg_top"></span>
    <span class="bg_bottom"></span>
    <menus></menus>
    <heads></heads>
    <router-view></router-view>
    <footers></footers>
    <copyright></copyright>
  </div>
</template>

<script>
import menus from "./componts/menu";
import heads from "./componts/heads";
import footers from "./componts/footers";
import copyright from "./componts/copyright";
export default {
  components: {
    menus,
    heads,
    footers,
    copyright
  }
};
</script>

<style lang="less" scoped>
.bg_top {
  position: absolute;
  top: 0;
  left: -120px;
  width: 1200px;
  height: 570px;
  background: url(/static/img/templatemo_bg_top.png) no-repeat;
  z-index: -1000;
}
.bg_bottom {
  position: absolute;
  bottom: 0;
  left: -120px;
  width: 1200px;
  height: 270px;
  background: url(/static/img/templatemo_bg_bottom.png) no-repeat;
  z-index: -1200;
}
</style>
