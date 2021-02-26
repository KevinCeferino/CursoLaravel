<div class="form-group">
                    <label for="title">Título</label>
                        <input
                        class="form-control bg-light shadow-sm border-0"
                        id="title"
                        type="text"
                        name="title"
                        value="{{ old('title' ,$project->title) }}">
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea
                    class="form-control bg-light shadow-sm border-0"
                    id="description"
                    name="description">{{ old('description' , $project->description) }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="url">URL del proyecto</label>
                    <input
                        class="form-control bg-light shadow-sm border-0"
                        id="url"
                        type="text"
                        name="url"
                        value="{{ old('url' , $project->url) }}">
                </div>