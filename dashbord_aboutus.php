<?php
session_start();
require_once ('dbconn.php');
if (empty($_SESSION['email'])){
    header("Location: login.php");
}
?>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href="https://fonts.googleapis.com/css?family=Karla|Yeseva+One" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
  height: 100%;
  font-family: sans-serif;
  background-color: #282828;
  background-image: url("data:image/svg+xml,%3Csvg width='52' height='26' viewBox='0 0 52 26' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232f2f2f' fill-opacity='0.4'%3E%3Cpath d='M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4v2c-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6zm25.464-1.95l8.486 8.486-1.414 1.414-8.486-8.486 1.414-1.414z' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E");}
.container {
  width: 100%;
  display: flex;
  align-items: center;
  height: 100vh;
  flex-wrap: wrap;
}
.header {
  width: 100%;
  text-align: center;
  margin-bottom: 45px;
  overflow: hidden;
  transition: 0.45s ease 0.05s;
  max-height: 100px;
}
.header-title {
  width: 100%;
  font-size: 3.3em;
  color: azure;
  margin-bottom:15px;
}
.team-container {
  padding: 0 30px;
  box-sizing: border-box;
  max-width: 1400px;
  width: 100%;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  height: auto;
}
.person {
  width: calc(25% - 30px);
  cursor: pointer;
  overflow: hidden;
  transition: 0.45s;
  position: relative;
  margin-top:30px;
}
.person-details {
  padding: 0 20px;
  box-sizing: border-box;
  margin-top: -15px;
  transition: 0.3s;
}
.person-img {
  width: 100%;
}
.person-title {
  color: #fff;
  font-size: 2em;
}
.person-desc {
  color: rgba(255, 255, 255, 0.2);
  margin-top: 10px;
  text-transform: uppercase;
  font-size: 0.8em;
  letter-spacing: 2px;
}
.person-list {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  justify-content: space-between;
}
.person-list:hover .person {
  opacity: 0.6;
}
.person:hover {
  opacity: 1 !important;
}
.person:before {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  background: #4caf50;
  content: "";
  height: 0px;
  transition: 0.45s;
}
.person:after {
  content: "\f2ca";
  font-family: "Ionicons";
  font-size: 36px;
  color: #282828;
  position: absolute;
  width: 100%;
  top: 0;
  height: 100%;
  display: flex;
  opacity: 0;
  visibility: hidden;
  transition: 0.3s;
  text-align: center;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  left: 0;
  flex-direction: column;
}
.container-selected .header {
  max-height: 0px;
}
.container-selected .person {
  opacity: 0 !important;
  pointer-events: none;
}
.container-selected .person-list .person-selected {
  opacity: 1 !important;
}
.container-selected .person-list .person-selected:before {
  height: 100%;
}
.container-selected .person-list .person-selected .person-details {
  margin-top: -40px;
  opacity: 0;
}
.team-detail {
  position: absolute;
  width: calc(100% - 100px);
  right: 80px;
  top: 0;
  height: 100%;
  color: #fff;
  transition: 0.15s;
  opacity: 0;
  visibility: hidden;
  box-sizing: border-box;
}
.team-detail-bio-content p {
  margin-bottom: 15px;
  line-height: 25px;
  font-size: 1.05em;
}
.team-detail-header {
  margin-bottom: 30px;
}
.team-detail-inner {
  min-height: 100%;
  display: flex;
  flex-wrap: wrap;
}
.team-detail-left {
  position: relative;
  width: 650px;
  min-height: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: top;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}
.team-detail-left:before {
  width: 100%;
  height: 100%;
  content: "";
  background: rgba(40, 40, 40, 0.8);
  position: absolute;
  right: 0;
  top: 0;
}
.team-detail-left:after {
  width: 100%;
  height: 100%;
  content: "";
  background: linear-gradient(to right, rgba(40, 40, 40, 0) 9%, rgba(40, 40, 40, 0) 10%, rgba(40, 40, 40, 0) 38%, rgba(40, 40, 40, 1) 92%, rgba(40, 40, 40, 1) 100%);
  position: absolute;
  right: 0;
  top: 0;
}
.team-detail-photo {
  position: relative;
  text-align: center;
  z-index: 999;
  width: 100%;
  font-size: 0px;
}
.team-detail-photo img {
  max-width: 100%;
  box-shadow: 0 10px 22px rgba(0, 0, 0, .3);
}
.team-detail-right {
  box-sizing: border-box;
  width: calc(100% - 650px);
  min-height: 100%;
  display: flex;
  align-items: center;
  padding-right: 10%;
  position: relative;
  right: 0;
  flex-wrap: wrap;
}
.team-detail-right .person-title {
  font-family: "Yeseva One", cursive;
  font-size: 2.2em;
}
.container-ready .team-detail {
  transition: 0.45s ease 0.3s;
  opacity: 1;
  right: 0;
  visibility: visible;
}
.container-ready .team-detail img {
  width: 75%;
}
.container-ready .team-container {
  height: 0px;
  overflow: hidden;
}
.container-ready .person-selected {
  left: 0px !important;
  top: 0px !important;
  z-index: 99;
  height: 100% !important;
  width: 100px !important;
  pointer-events: auto;
}
.container-ready .person-selected:after {
  opacity: 1;
  visibility: visible;
}
.person-back:before {
  height: 0px !important;
}
.person-back .person-details {
  margin-top: -15px !important;
  transition-delay: 0.35s;
  opacity: 1 !important;
}
.social {
  margin-top: 15px;
}
.social a {
  color: #4caf50;
  font-size: 20px;
  margin-right: 8px;
}
.social a:last-child {
  margin-right: 0;
}
@media (max-width: 1200px) {
  .team-detail-left {
    width: 400px;
    padding: 0 40px;
    box-sizing: border-box;
  }
  .team-detail-right {
    padding-right: 0;
    width: calc(100% - 440px);
  }
  .person .person-title {
    font-size: 1.7em;
  }
  .person-details {
    padding: 0 10px;
  }
}
@media (max-width: 970px) {
  .team-detail-left {
    width: 100%;
    padding: 50px 50px 30px 50px;
  }
  .team-detail-left:after {
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(33, 33, 33, 1) 83%, rgba(40, 40, 40, 1) 100%);
  }
  .team-detail-right {
    padding: 0 50px;
    width: 100%;
  }
  .team-detail-header {
    text-align: center;
  }
  .container-ready .person-selected {
    width: 50px !important;
  }
  .team-detail {
    width: calc(100% - 50px);
  }
  .person {
    width: calc(50% - 20px);
  }
}
@media (max-width: 480px) {
  .person {
    width: 100%;
    margin-bottom: 50px;
  }
  .header {
    margin-top: 50px;
  }
}

</style>
</head>
<body>
<div :class="['container', isSelected ? 'container-selected':'', isReady ? 'container-ready':'']" id="app">
  <div class="team-container">
    <div class="header">
    <a href="dashbord.php" style="text-decoration:none"><span class="head_i"><h2 class="header-title">Our Team</h2></span></a>
    </div>
    <div class="person-list">
      <div class="person" v-for="(person,index) in persons" @click="selectPerson(index,$event)"><img class="person-img" :src="person.photo">
        <div class="person-details">
          <h2 class="person-title">{{person.name}}</h2>
          <p class="person-desc">{{person.title}}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="team-detail">
    <div class="team-detail-inner" v-if="isOk">
      <div class="team-detail-left" :style=`background-image:url(${selectedPersonData.photo})`>
        <div class="team-detail-photo"><img :src="selectedPersonData.photo" alt="">
        </div>
      </div>
      <div class="team-detail-right">
        <div class="team-detail-bio">
          <div class="team-detail-header">
            <h2 class="person-title">{{selectedPersonData.name}}</h2>
            <p class="person-desc">{{selectedPersonData.title}}</p>
            <div class="social">
              <a :href="selectedPersonData.social.facebook" target="_blank" class="ion-social-facebook"></a>&nbsp &nbsp
              <a :href="selectedPersonData.social.twitter" target="_blank" class="ion-social-twitter"></a>&nbsp &nbsp
              <a :href="selectedPersonData.social.in" target="_blank" class="ion-social-linkedin"></a>&nbsp &nbsp
              <a :href="selectedPersonData.social.instagram" target="_blank" class="ion-social-instagram"></a>
            </div>
          </div>
          <div class="team-detail-bio-content" v-html="selectedPersonData.bio">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.1/vue-resource.min.js"></script>
  <script>
const persons = [
  {
    name: "Raj Solanki",
    photo: "images/about/raj.jpg",
    title: "Full Stack Devloper",
    bio:
      "<p></p>",
    social: {
      facebook: "https://www.facebook.com/people/Raj-Solanki/100009508130813",
      twitter: "https://twitter.com/weirdlywild_07",
      in: "https://www.linkedin.com/in/raj-solanki-67531516b/",
      instagram: "https://instagram.com/weirdlywild_07"
    }
  },
  {
    name: "Pruthvi Patel",
    photo: "images/about/pruthvi_1.jpg",
    title: "Full Stack Devloper",
    bio:
      "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet architecto ea blanditiis quo labore esse magnam illum ut quibusdam. Corrupti ratione iure aliquam adipisci! Harum vitae laboriosam temporibus illo suscipit?</p><p>Saepe repudiandae rerum quam ut perferendis, ullam similique nemo quod, assumenda mollitia consectetur. Eveniet optio maxime perferendis odit possimus? Facilis architecto nesciunt doloribus consectetur culpa veritatis accusamus expedita quos voluptate!</p><p>Nisi provident minus possimus optio voluptate rem, perspiciatis, placeat, culpa aperiam quod temporibus.</p>",
    social: {
      facebook: "https://www.facebook.com/pruthvi.patel.1257",
      twitter: "https://twitter.com/Pruthvi_2807?s=03",
      in: "https://www.linkedin.com/in/pruthvi-patel-055077162",
      instagram: "https://instagram.com/i_m_pruthvipatel"
    }
  },
  {
    name: "Jainam Sutariya",
    photo: "images/about/jainam.jpg",
    title: "UI Designer",
    bio:
      "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet architecto ea blanditiis quo labore esse magnam illum ut quibusdam. Corrupti ratione iure aliquam adipisci! Harum vitae laboriosam temporibus illo suscipit?</p><p>Saepe repudiandae rerum quam ut perferendis, ullam similique nemo quod, assumenda mollitia consectetur. Eveniet optio maxime perferendis odit possimus? Facilis architecto nesciunt doloribus consectetur culpa veritatis accusamus expedita quos voluptate!</p><p>Nisi provident minus possimus optio voluptate rem, perspiciatis, placeat, culpa aperiam quod temporibus.</p>",
    social: {
      facebook: "https://www.facebook.com/jainam.sutariya.9",
      twitter: "#",
      in: "#",
      instagram: "https://instagram.com/jems_24398"
    }
  },
  {
    name: "Ravi Patel",
    photo: "images/about/ravi.jpg",
    title: "QA Engineer",
    bio:
      "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet architecto ea blanditiis quo labore esse magnam illum ut quibusdam. Corrupti ratione iure aliquam adipisci! Harum vitae laboriosam temporibus illo suscipit?</p><p>Saepe repudiandae rerum quam ut perferendis, ullam similique nemo quod, assumenda mollitia consectetur. Eveniet optio maxime perferendis odit possimus? Facilis architecto nesciunt doloribus consectetur culpa veritatis accusamus expedita quos voluptate!</p><p>Nisi provident minus possimus optio voluptate rem, perspiciatis, placeat, culpa aperiam quod temporibus.</p>",
    social: {
      facebook: "https://www.facebook.com/patel.ravi.1048554",
      twitter: "#",
      in: "#",
      instagram: "https://instagram.com/ravipatel597"
    }
  }
];

const app = new Vue({
  el: "#app",
  data() {
    return {
      persons: persons,
      selectedPersonIndex: null,
      isSelected: false,
      selectedPerson: null,
      inlineStyles: null,
      isReady: false,
      isOk: false,
      selectedPersonData: {
        name: null,
        title: null,
        photo: null,
        social: {
          facebook: null,
          twitter: null,
          in: null,
          instagram: null
        }
      }
    };
  },
  methods: {
    selectPerson(index, el) {
      if (!this.isOk) {
        this.selectedPersonIndex = index;
        this.isSelected = true;
        el.target.parentElement.className == "person-details"
          ? (this.selectedPerson = el.target.parentElement.parentElement)
          : (this.selectedPerson = el.target.parentElement);

        this.selectedPerson.classList.add("person-selected");
        this.selectedPerson.setAttribute(
          "style",
          `width:${this.selectedPerson.offsetWidth}px;`
        );
        this.selectedPersonData = this.persons[index];
        window.setTimeout(() => {
          this.inlineStyles = `width:${this.selectedPerson
            .offsetWidth}px;height:${this.selectedPerson
            .offsetHeight}px;left:${this.selectedPerson.offsetLeft}px;top:${this
            .selectedPerson.offsetTop}px;position:fixed`;
          this.selectedPerson.setAttribute("style", this.inlineStyles);
        }, 400);
        window.setTimeout(() => {
          this.isReady = true;
          this.isOk = true;
        }, 420);
      } else {
        this.reset();
      }
    },
    reset() {
      this.isReady = false;
      window.setTimeout(() => {
        this.selectedPerson.classList.add("person-back");
      }, 280);
      window.setTimeout(() => {
        this.selectedPerson.setAttribute("style", "");
      }, 340);
      window.setTimeout(() => {
        this.isSelected = false;
        this.selectedPerson.classList.remove("person-back", "person-selected");
        this.isOk = false;
      }, 400);
    }
  }
});

</script>
</body>
</html>
