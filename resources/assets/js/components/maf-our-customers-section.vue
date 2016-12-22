<template>
  <section id="our-customers" class="our-customers">
    <div class="container">
      <div class="row centered">
        <div class="center">
          <span class="line"></span>
          <h2>What our customers are saying about us</h2>
          <span class="line"></span>
        </div>
      </div>
      <div class="row centered">
        <div class="customers-gallery center">
            <ul id="ul_top_hypers">
                <li v-for="(testimonial,index) in vueRoot.testimonials" v-bind:index="index" v-if='index<=4'>
                    <img v-bind:src="testimonial.image" v-bind:class="{ opacity: index == item }" alt="Top Agent"/>
                </li>
            </ul>
        </div>
          <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0" v-if='vueRoot.testimonials[item]'>
              <div class="customer-valoration" v-show='vueRoot.testimonials[item]'>
                  <p>{{vueRoot.testimonials[item].message}}</p>
                  <h3><span>{{vueRoot.testimonials[item].name}}</span> <br>{{vueRoot.testimonials[item].address}}</h3>
              </div>
          </div>
      </div>
      <i v-on:click="previousItem" class="slider-ctrl-left big-arrow-left hidden-xs"></i>
      <i v-on:click="nextItem" class="slider-ctrl-right big-arrow-right hidden-xs"></i>
    </div>
  </section>
</template>
<script>
    export default{
        data() {
            return {
                vueRoot: this.$parent.$parent,
                item: 2
            }
        },
        methods: {
            nextItem: function () {
                this.item == 0 ? this.item=4 : this.item-=1;
            },
            previousItem: function () {
                this.item == 4 ? this.item=0 : this.item+=1;
            }
        }
    }
</script>
