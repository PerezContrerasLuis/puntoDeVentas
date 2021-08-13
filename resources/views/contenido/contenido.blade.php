@extends('principal')
@section('contenido')
    <template v-if="menu == 0 ">
        <example-component></example-component>
    </template>
    <template v-if="menu == 1">
    <categoria></categoria>
    </template>
    <template v-if="menu == 2">
        <articulo></articulo>
    </template>
    <template v-if="menu == 3">
        <h1>3</h1>
    </template>
    <template v-if="menu == 4">
        <h1>4</h1>
    </template>
    <template v-if="menu == 5">
        <h1>5</h1>
    </template>
    <template v-if="menu == 6">
        <cliente></cliente>
    </template>
    <template v-if="menu == 7">
        <h1>7</h1>
    </template>
    <template v-if="menu == 8">
        <h1>8</h1>
    </template>
    <template v-if="menu == 9">
        <h1>9</h1>
    </template>
    <template v-if="menu == 10">
        <h1>10</h1>
    </template>
    <template v-if="menu == 11">
        <h1>11</h1>
    </template>
    <template v-if="menu == 12">
        <h1>12</h1>
    </template>
@endsection