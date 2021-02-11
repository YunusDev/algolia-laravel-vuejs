<template>

    <div>
        <ais-instant-search
            :search-client="searchClient"
            index-name="articles"
        >
            <ais-search-box>
                <form slot-scope="{ currentRefinement, isSearchStalled, refine }" class=" py-30 form-search" style="">
                    <div class="input-group row">
                        <input  type="search"
                                v-model="currentRefinement"
                                @input="refine($event.currentTarget.value)" class="form-control h-60 search-box form-control-lg" style="" placeholder="Search ...">
                        <span :hidden="!isSearchStalled">Loading...</span>
                    </div>
                </form>
            </ais-search-box>
            <ais-configure :hitsPerPage="6" />
            <ais-infinite-hits  :class-names="{
                    'ais-InfiniteHits-list': 'row gap-y',
                    'ais-InfiniteHits-item': 'col-md-6 col-xl-4',
                  }">
                <template slot="item" slot-scope="{ item }" class="">

                    <single-article :item="item"></single-article>

                </template>

            </ais-infinite-hits>
        </ais-instant-search>

    </div>
</template>

<script>
import algoliasearch from "algoliasearch/lite";
import Article from "./Article";

export default {
    name: "Articles",

    data(){

        return {
            searchClient: algoliasearch(
                process.env.MIX_ALGOLIA_APP_ID,
                process.env.MIX_ALGOLIA_SEARCH
            ),

        }

    },

    components: {
        'single-article': Article
    },


}
</script>

<style scoped>
.input-group{
    border-width: 2px;
}
@media only screen and (max-width: 600px)
{
    .form-search{
        width: 98% !important;
        margin-top: 20px !important;
        margin-bottom: 20px !important;
    }
}

@media only screen and (min-width: 600px) {
    .form-search{
        width: 70% !important;
        margin: 20px auto !important;

    }
}

</style>
