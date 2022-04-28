<template>
    <div class="card">
      <h1 :style="{
        color: inputValue.length < 5 ? 'darkred' : 'darkblue',
        fontSize: inputValue.length < 6 ? '2rem' : '1.5rem'
      }">{{ title }}</h1>
      <div class="form-control">
        <input
            type="text"
            :placeholder="placeholderString"
            v-model="inputValue"
            @keypress.enter="addNewNote"
        />
      </div>
      <button class="btn" @click="addNewNote">Добавить</button>
      <hr />
      <ul class="list" v-if="notes.length !== 0">
        <li class="list-item" v-for="(note, idx) in notes" :key="note">
          <span :class="['bold', {'primary': note.length > 5}]">({{ idx + 1 }}) {{ toUpperCase(note) }}</span>
          <button class="btn danger" @click="removeNote(idx)">удалить</button>
        </li>
        <hr />
        <li>
          <strong>Общее количество: {{ notes.length }}</strong> | Удвоенное: {{ doubleCountComputed }}
        </li>
      </ul>
      <div v-else>Заметок пока нет. Добавьте первую</div>
    </div>
</template>

<script>
export default {
  name: "Zametki",
  data() {
    return {
      placeholderString: 'Введите название заметки',
      title: 'Список заметок',
      inputValue: '',
      notes: ['Заметка 1', 'Заметка 2']
    }
  },
  methods: {
    addNewNote() {
      if (this.inputValue !== '') {
        this.notes.push(this.inputValue)
        this.inputValue = ''
      } else {
        console.log('Не могу добавить. Значение пусто!')
      }
    },
    toUpperCase(item) {
      return item.toUpperCase()
    },
    removeNote(idx) {
      this.notes.splice(idx, 1)
    }
  },
  computed: {
    doubleCountComputed() {
      return this.notes.length * 2
    },
  },
  watch: {
    inputValue(value) {
      if (value.length > 10) {
        this.inputValue = ''
      }
    }
  }
}
</script>

<style scoped>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

  * {
    box-sizing: border-box;
  }

  hr {
    margin: 1rem 0;
  }

  strong,
  .bold {
    font-weight: 600;
  }

  ol,
  p,
  ul {
    line-height: 1.7;
  }

  a {
    color: #3eaf7c;
    font-weight: 500;
    text-decoration: none;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-weight: 500;
    line-height: 1.45;
  }

  h1 {
    font-size: 2.2rem;
    font-weight: 600;
  }

  h2 {
    font-size: 1.65rem;
    padding-bottom: 0.3rem;
    border-bottom: 1px solid #eaecef;
  }

  h3 {
    font-size: 1.35rem;
  }

  .primary {
    color: #42b983;
  }

  .danger {
    color: #e53935;
  }

  .btn {
    color: #42b983;
    position: relative;
    place-content: center;
    place-items: center;
    width: fit-content;
    border-radius: 99px;
    letter-spacing: 0.05em;
    border: 1px solid #42b983;
    text-decoration: none;
    text-transform: uppercase;
    margin-right: 10px;
    padding: 0.5rem 1.5rem;
    white-space: nowrap;
    font-weight: 700;
    outline: none;
    background: #fff;
    transition: all 0.22s;
  }

  .btn:hover {
    cursor: pointer;
    opacity: 0.8;
  }

  .btn:active {
    box-shadow: inset 1px 1px 1px rgba(0, 0, 0, 0.3);
  }

  .btn.primary {
    background: #42b983;
    color: #fff;
  }

  .btn.danger {
    background: #e53935;
    color: #fff;
    border-color: #e53935;
  }

  .container {
    margin: 0 auto;
    max-width: 1000px;
  }

  .pt-5 {
    padding-top: 5rem;
  }

  .form-control {
    position: relative;
    margin-bottom: 0.5rem;
  }

  .form-control input {
    margin: 0;
    outline: none;
    border: 2px solid #ccc;
    display: block;
    width: 100%;
    color: #2c3e50;
    padding: 0.5rem 1.5rem;
    border-radius: 3px;
    font-size: 1rem;
  }

  .form-control label {
    display: block;
    margin: 0 0 0.3rem 0.3rem;
    font-weight: 500;
  }

  .form-control input:active,
  .form-control input:focus {
    transition: border 0.22s;
    border: 2px solid #42b983;
  }

  .card {
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.2);
    background: #fff;
  }

  .card.center {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .list {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .list-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 0;
  }
</style>