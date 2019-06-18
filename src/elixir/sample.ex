defmodule User do
  use Ecto.Schema
  schema "users" do
    field :first_name, :string
    field :last_name,  :string
  end
end
