<style>
    th, td{
  border: 1px solid black;
  padding: 10px;
}
</style>
<fieldset>
    <legend>Rechercher les candidats d'une option</legend>
    <form action="{{route('recherche') }}" method="get" accept-charset="UTF-8" role="search" style="display: flex; align-items: center; gap: 20px;">
        @csrf
        <div style="display: flex; flex-direction: column; gap: 10px;">
            <div>
                <label for="">Dans l'option: </label>
                <select name="search">
                    
                    @foreach ($options as $option)
                        <option value="{{$option->id}}">{{ $option->cod_opt }}</option>
                    @endforeach
                </select>
                @error('search')
                    <div style="color: red;">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label>Envoyer</label>
                <button type="submit">Ok</button>
            </div>
        </div>
    </form>
</fieldset>
<h1>LISTE DES ETUDIANTS</h1>
<table style="border-collapse: collapse;">
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Sexe</th>
    </tr>
    @foreach ($etudiants as $etudiant)
        <tr>
            <td>{{ $etudiant->nom }}</td>
            <td>{{ $etudiant->prenom }}</td>
            <td>{{ $etudiant->sexe }}</td>
        </tr>
    @endforeach
</table>