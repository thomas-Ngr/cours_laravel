<x-layout>
    <x-slot name="title">
        Contact
    </x-slot>
    <h1>Ecrivez-moi !</h1>
    <p>Si ce cours pouvait aller un peu plus vite, ce serait cool.</p>
    <form action="">
        <div class="form_row">
            <label for="email">Courriel</label>
            <input id="email" type="email" placeholder="example@email.net">
        </div>
        <div class="form_row">
            <label for="message">Votre message</label>
            <textarea id="message" rows="5" cols="43"></textarea>
        </div>
        <div class="form_row">
            <input type="submit" value="Envoyer">
        </div>
    </form>
</x-layout>