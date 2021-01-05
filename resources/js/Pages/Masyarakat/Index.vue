<template>
  <AppLayout title="Data Masyarakat">
    <div class="bg-white p-3 shadow-sm">
      <div class="d-flex justify-content-between mb-3">
        <h3>Data Masyarakat</h3>
        <inertia-link href="/masyarakat/create">
          <b-button variant="primary">Tambah</b-button>
        </inertia-link>
      </div>
      <b-alert
        variant="info"
        dismissible
        fade
        :show="true"
        @dismissed="false"
        v-if="$page.props.flash.message"
      >
        {{ $page.props.flash.message }}
      </b-alert>
      <table class="table table-stripped">
        <thead>
          <tr>
            <td>#</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Pekerjaan</td>
            <td>Aksi</td>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(masyarakat, i) in masyarakats" :key="i">
            <td>{{ i + 1 }}</td>
            <td>{{ masyarakat.name }}</td>
            <td>{{ masyarakat.gender }}</td>
            <td>{{ masyarakat.profesi }}</td>
            <td>Aksi</td>
          </tr>
        </tbody>
      </table>
    </div>
  </AppLayout>
</template>

<script>
import AppLayout from "../../Layout/AppLayout";
export default {
  components: {
    AppLayout,
  },
  props: {
    masyarakats: Object,
  },
};
</script>