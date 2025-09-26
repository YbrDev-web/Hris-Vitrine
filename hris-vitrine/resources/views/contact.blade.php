<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - HRIS PRO CONSULTING</title>
</head>
<body>
    <h1>Formulaire de contact</h1>

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <label>Nom :</label>
        <input type="text" name="name" required><br>

        <label>Email :</label>
        <input type="email" name="email" required><br>

        <label>Message :</label>
        <textarea name="message" required></textarea><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>

