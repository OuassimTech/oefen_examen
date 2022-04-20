<?= $data['title']; ?>

<form action="<?= URLROOT; ?>/teachers/update" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="docentenafkorting" id="docentenafkorting" value="<?= $data["row"]->docentenafkorting?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="voornaam" id="voornaam" value="<?= $data["row"]->voornaam?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="tussenvoegsel" id="tussenvoegsel" value="<?= $data["row"]->tussenvoegsel?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="achternaam" id="achternaam" value="<?= $data["row"]->achternaam?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="email" id="email" value="<?= $data["row"]->email?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="telefoonnummer" id="telefoonnummer" value="<?= $data["row"]->telefoonnummer?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="mentorklas" id="mentorklas" value="<?= $data["row"]->mentorklas?>">
                </td>
            </tr>
        </tbody>
    </table>
    <button type="submit" class="btn btn-primary">Update</button>
</form>