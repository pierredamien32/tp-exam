<fieldset>
    <legend>Renseignements</legend>
    <form action="{{ route('inscription.store') }}" method="post" style="display: flex; align-items: center; gap: 20px;">
        @csrf
        <div style="display: flex; flex-direction: column; gap: 10px;">
            <div>
                <label for="">Nom: </label>
                <input type="text" name="nom" id="">
            </div>
            <div>
                <label for="">Prénom: </label>
                <input type="text" name="prenom" id="">
            </div>
            <div>
                <label for="">Date de naissance: </label>
                <input type="date" name="datnaiss" id="">
            </div>
            <div>
                <label for="">Ville: </label>
                <input type="text" name="ville" id="">
            </div>
            <div>
                <label for="">Sexe: </label>
                <input type="text" name="sexe" id="">
            </div>
            <div>
                <label for="">Option: </label>
                <select name="option">
                    @foreach ($options as $option)
                        <option value="{{$option->id}}">{{ $option->cod_opt }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="reset">Effacer</button>
                <button type="submit">Enregistrer</button>
            </div>
        </div>
    </form>
</fieldset>
