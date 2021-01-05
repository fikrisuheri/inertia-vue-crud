<template>
    <Layout title="Tambah Data Masyarakat">
        <div class="bg-white p-3 shadow-sm">
            <div class="d-flex justify-content-between mb-3">
                <h3>Tambah Masyarakat</h3>
                <inertia-link href="/masyarakat">
                    <b-button variant="secondary">Kembali</b-button>
                </inertia-link>
            </div>

            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" class="form-control" v-model="form.name">
                <div class="text-danger" v-if="errors.name">{{ errors.name }}</div>
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select v-model="form.gender" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <div class="text-danger" v-if="errors.gender">{{ errors.gender }}</div>
            </div>
            <div class="form-group">
                <label for="">Profesi</label>
                <input type="text" class="form-control" v-model="form.profesi">
                <div class="text-danger" v-if="errors.profesi">{{ errors.profesi }}</div>
            </div>

            <div class="text-right">
                <b-button variant="success" v-text="buttonText" v-on:click="store()"></b-button>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../../Layout/AppLayout'
export default {
    props:{
        errors:Object
    },
    data:() => ({
        form:{
            name:'',
            gender:'',
            profesi:'',
        },
        buttonText:'Simpan Data',
    }),
    components:{
        Layout
    },
    methods:{
        store() {
                this.$inertia.post('/masyarakat/store',this.form)
        }
    }
}
</script>