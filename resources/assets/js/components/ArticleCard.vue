
// TODO --- set up component so that the content within can be inserted when the component is used
// TODO --- set up this component to be reactive with smaller sceens by making the image go to the top of the card and overlay the title over it

<template>
<div id="Card-Wrapper">
<div id="CardContainer" class="uk-card uk-card-default uk-card-hover">
    <div class="uk-card-body uk-padding-small">         
        <div> 
            <div class="uk-heading-divider card-heading uk-panel">
                <h3 class="card-title">Data Parsing</h3>
                <div class="uk-text-meta uk-padding-small card-meta"> Wednesday 3rd, 2013 </div>
            </div>
            <p class="uk-text-left card-text truncate">Be me shall purse my ought times. Joy years doors all would again rooms these. Solicitude announcing as to sufficient my. No my reached suppose proceed pressed perhaps he. Eagerness it delighted pronounce repulsive furniture no. Excuse few the remain highly feebly add people manner say. It high at my mind by roof. No wonder worthy in dinner. A simple bootstrap table and logging console to use as an interface while I write the php scripts to write and read some basic data to the database.</p>
        </div>
    </div>
</div>
<div class="CardSpacer"></div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>

.card-heading {
    display: block;
}

.card-title {
    display: inline-block;
    margin-bottom: 0px;
    font-size: 3.2rem;
}

.card-meta {
    display: inline-block;
    position: absolute;
    right: 0px;
    bottom: 0px;
    }

.card-text {
    font-size: 1.1rem;
    margin-bottom: 20px;
}

.CardSpacer{
    height: 40px;
}


/*  // TODO write some javascript so that you can truncate the text based on multiple lines or total characters. */

.truncate {
  width: 100%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

</style>

