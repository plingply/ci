<template>
  <div class="menu">
    <div v-for="(item,index) in menu" :key="index"><a class="active" :href="item.url">{{ item.name }}</a></div>
  </div>
</template>

<script>
export default {
  computed: {
    menu(){
      return this.$store.state.menu
    }
  },
}
</script>


<style lang="less" scoped>
@import "../../less/style";
.menu {
  width: 100%;
  height: 75px;
  margin-top: 40px;
  margin-bottom: 20px;
  background: url(/static/img/templatemo_menu.png) no-repeat;
  > div {
    float: left;
    width: 164px;
    height: 75px;
    background: url(/static/img/templatemo_menu_divider.png) center right
      no-repeat;
    a {
      float: left;
      display: block;
      width: 160px;
      height: 75px;
      line-height: 75px;
      padding-right: 4px;
      font-size: 16px;
      font-style: italic;
      color: #62260e;
      text-align: center;
      text-decoration: none;
      font-weight: 700;
      outline: none;
      border: none;
      &.active {
        background: url(/static/img/templatemo_menu_hover.png) center center
          no-repeat;
      }
    }
  }
}
</style>
