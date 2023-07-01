# Comandos de Eloquent vistos en el curso
Estos son los diferentes comandos vistos en el curso para gestionar los datos con Eloquent desde tinker
```
use App\Models\Curso;
$cursos = Curso::all();
$cursos = Curso::where('categories','Diseño web')->get();
$cursos = Curso::where('category','Diseño web')->get();
$cursos = Curso::where('category','Diseño web')->orderBy('id','desc')->get();
$cursos = Curso::where('category','Diseño web')->orderBy('name','asc')->get();
$cursos = Curso::where('category','Diseño web')->orderBy('name','asc')->first();
$cursos = Curso::select('name','description')->get();
$cursos = Curso::select('name','description')->orderBy('name','asc')->get();
$cursos = Curso::select('name','description')->orderBy('name','asc')->where('category','Diseño web')->get();
$cursos = Curso::select('name','description','category')->orderBy('name','asc')->where('category','Diseño web')->get();
$cursos = Curso::select('name as title','description','category')->orderBy('name','asc')->where('category','Diseño web')->get();
$cursos = Curso::select('name as title','description','category')->orderBy('name','asc')->where('category','Diseño web')->take(5)->get();
$curso = Curso::where('name','Aut dolorum vel ad.')->get(); | $curso[0]->name;
$curso = Curso::find(5); | $curso->description;
$cursos = Curso::where('id','>',45)->get();
$cursos = Curso::where('name','like','Temporibus')->get();
$cursos = Curso::where('description','like','%Temporibus%')->get();
```
