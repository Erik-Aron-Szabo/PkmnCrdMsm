<template>
  <div class="ulblock">
    <!-- <h4>Cards for {{ set_code }}</h4> -->
    <ul id="double">
      <li v-for="card in setCards" :key="card">
        <a :href="'/cards/' + card.id">
        <img :src="card.imageUrl" :alt="card.name" />
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ["set_code"],
  data() {
    return {
      setCode: this.set_code,
      setCards: [],
    };
  },

  methods: {
    loadCards: async function () {
      axios
        .get("https://api.pokemontcg.io/v1/cards?setCode=" + this.set_code)
        .then((resp) => {
          this.setCards = resp.data.cards;
        });
    },
  },

  mounted() {
    this.loadCards();
  },
};
</script>

<style>
.ulblock {
  padding: 0;
  margin: 0;
}
ul {
  column-count: 4;
  list-style-type: none;
  widows: 100%;
  margin: 2px;
}

img {
  align-content: center;
  margin-bottom: 5px;
}
/* 
#double li {
  width: 50%;
} */

li {
  float: left;
}
</style>