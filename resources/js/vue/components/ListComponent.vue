<template>
    <div>

        <!-- <router-link :to="{ name:'save'}">Create</router-link> -->

        <o-modal v-model:active="confirmDeleteAction">
            <p>
                Seguro que quieres eliminar?
            </p>
            <o-button variant="danger" size="small" @click="deletePost">Delete</o-button>
            <o-button size="small" @click="confirmDeleteAction = false">Cancel</o-button>
        </o-modal>

        <h1 class="">Post List</h1>

        <o-button iconLeft="plus" size="small" @click="$router.push({ name: 'save' })">Create</o-button>

        <div class="mb-5">

        </div>

        <o-table :data="posts.data" :loading="isLoading">
            <o-table-column field="id" label="ID" v-slot="p">
                {{ p.row.id }}
            </o-table-column>
            <o-table-column field="title" label="Title" v-slot="p">
                {{ p.row.title }}
            </o-table-column>
            <o-table-column field="slug" label="Slug" v-slot="p">
                {{ p.row.slug }}
            </o-table-column>
            <o-table-column field="description" label="Description" v-slot="p">
                {{ p.row.description }}
            </o-table-column>
            <o-table-column field="category_id" label="Category" v-slot="p">
                {{ p.row.category.title }}
            </o-table-column>
            <o-table-column field="posted" label="Posted" v-slot="p">
                {{ p.row.posted }}
            </o-table-column>
            <o-table-column field="actions" label="Actions" v-slot="p">
                <router-link :to="{ name: 'save', params: { 'slug': p.row.slug } }">Edit</router-link>
                <o-button iconLeft="delete" variant="danger" size="small" rounded
                    @click="deletePostRow = p; confirmDeleteAction = true">Delete</o-button>
            </o-table-column>
        </o-table>

        <o-pagination v-if="posts.data && posts.data.length > 0" @change="updatePage" :total="posts.total"
            v-model:current="currentPage" :range-before="2" :range-after="2" :order="centered" size="small"
            :simple="false" :rounded="true" :per-page="posts.per_page" />

    </div>
</template>

<script>


export default {

    data() {
        return {
            posts: [],
            isLoading: true,
            currentPage: 1,
            confirmDeleteAction: false,
            deletePostRow: ''
        }
    },
    mounted() {
        this.listPage()
    },
    methods: {
        updatePage() {
            setTimeout(() => {
                this.listPage()
            }, 100);
        },
        listPage() {
            this.isLoading = true
            this.$axios.get(this.$root.urls.postPaginate+'/?page=' + this.currentPage).then((res) => {
                this.posts = res.data
                this.isLoading = false
            })
        },
        deletePost() {
            //console.log('test')
            this.confirmDeleteAction = false,
            this.$axios.delete(this.$root.urls.postDelete + this.deletePostRow.row.id)
            this.posts.data.splice(this.deletePostRow.index, 1)

            this.$oruga.notification.open({
                message: 'Delete Success',
                position: 'bottom-right',
                variant: 'danger',
                duration: 2000,
                //closable: true,
            })
        }
    }
}

</script>