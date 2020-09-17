<template>
  <div class="center">
    <h3>{{Card.name}}</h3>
    <hr />
    <h5>{{Card.subtype}}</h5>
    <hr />
    <div>
      <img id="card-img" :src="Card.imageUrl" alt="Card.name" />
    </div>
    <hr />
    <div>
      <h5>{{Card.series}}</h5>
    </div>

    <hr />
    <div>
      <h4>{{Card.set}}</h4>
    </div>
  </div>
</template>

<script>
export default {
  props: ["cards_card_id"],
  data() {
    return {
      CardId: this.cards_card_id,
      Card: null,
    };
  },

  methods: {
    loadCard: function () {
      axios
        .get("https://api.pokemontcg.io/v1/" + this.cards_card_id)
        .then((resp) => {
          this.Card = resp.data.card;
        });
    },
  },

  mounted() {
    this.loadCard();
  },
};
</script>

<style>
#card-img {
  text-align: center;
  margin-left: 32%;
  margin-right: 30%;
  align-content: center;
  margin-bottom: 5px;
}

h3 {
  font-weight: bold;
  text-align: center;
}
h5 {
  text-align: center;
}

.center * {
  align-content: center;
}
</style>